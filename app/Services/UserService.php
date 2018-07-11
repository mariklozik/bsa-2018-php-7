<?php
namespace App\Services;

use App\Entity\User;
use App\Requests\SaveUserRequest;
use Illuminate\Support\Collection;

class UserService implements UserServiceInterface
{
    public function findAll(): Collection
    {
        return User::all();
    }

    public function findById(int $id): ?User
    {
        return User::find($id) ? User::find($id) : null;
    }

    public function save(SaveUserRequest $request): User
    {
        if(empty($request->getId())){
            $user = new User();
            $user->id = $request->getId();
        }else{
            $user = User::find($request->getId());
        }

        $user->name = $request->getName();
        $user->email = $request->getEmail();
        $user->save();

        return $user;
    }

    public function delete(int $id): void
    {
        User::find($id)->delete();
    }
}