<?php

namespace App\Services;

use App\User;
use Illuminate\Support\Facades\DB;

class UserService extends Service
{

    private $telephoneService;
    private $addressService;

    public function __construct(TelephoneService $telephoneService, AddressService $addressService)
    {
        $this->telephoneService = $telephoneService;
        $this->addressService = $addressService;
    }

    public function update(array $data, int $id)
    {
        DB::beginTransaction();
        $user = User::find($id);
        if (is_null($user)) {
            return null;
        }
        if (isset($data['telephones'])) {
            $this->manageTelephones($data['telephones'], $user);
        }
        if (isset($data['address'])) {
            $this->manageAddress($data['address'], $user);
        }
        $user->fill($data);
        $user->save();
        DB::commit();
        return $user;
    }

    private function manageTelephones(array $telephones, User $user)
    {
        if (empty($telephones)) {
            foreach ($user->telephones as $telephone) {
                $this->telephoneService->destroy($telephone->id);
            }
        } else {
            foreach ($telephones as $telephone) {
                if (isset($telephone['id'])) {
                    $this->telephoneService->update($telephone, $telephone['id']);
                } else {
                    $telephone['user_id'] = $user->id;
                    $this->telephoneService->create($telephone);
                }
            }
        }
    }

    private function manageAddress(array $address, User $user)
    {
        if (empty($address)) {
            if (!is_null($user->address)) {
                $this->addressService->destroy($user->address->id);
            }
        } else if (isset($address['id'])) {
            $this->addressService->update($address, $address['id']);
        } else {
            $address['user_id'] = $user->id;
            $this->addressService->create($address);
        }
    }
}
