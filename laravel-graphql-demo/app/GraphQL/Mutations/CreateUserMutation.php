<?php

namespace App\GraphQL\Mutations;

use App\Models\User;
use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Facades\GraphQL;
use Rebing\GraphQL\Support\Mutation;

class CreateUserMutation extends Mutation
{
    protected $attributes = [
        'name' => 'createUser'
    ];

    public function type(): Type
    {
        return GraphQL::type('User'); // Return the User type
    }

    public function args(): array
    {
        return [
            'name' => [
                'type' => Type::nonNull(Type::string()),
            ],
            'email' => [
                'type' => Type::nonNull(Type::string()),
            ],
            'password' => [
                'type' => Type::nonNull(Type::string()),
            ],
        ];
    }

    public function resolve($root, $args)
    {
        return User::create([
            'name' => $args['name'],
            'email' => $args['email'],
            'password' => bcrypt($args['password']),
        ]);
    }
}
