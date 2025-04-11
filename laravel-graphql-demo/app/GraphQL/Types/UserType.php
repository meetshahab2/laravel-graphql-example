<?php

namespace App\GraphQL\Types;

use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Type as GraphQLType;
use App\Models\User;

class UserType extends GraphQLType
{
    protected $attributes = [
        'name' => 'User',
        'description' => 'A user',
        'model' => User::class,
    ];

    public function fields(): array
    {
        return [
            'id' => [
                'type' => Type::nonNull(Type::int()),
                'description' => 'The id of the user'
            ],
            'name' => [
                'type' => Type::string(),
                'description' => 'The name of the user'
            ],
            'is_gmail_user' => [
                'type' => Type::boolean(),
                'description' => 'True if email is Gmail',
            ],
            'email' => [
                'type' => Type::string(),
                'description' => 'The email of the user'
            ]
        ];
    }
}
