<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];
    /*
    ユーザの作成に create() という関数を使います。
    create() は save() と同じくデータベースに INSERT を発行する関数です。
    create() は save() のようにインスタンスを作成する必要がなく
    （$user->name = $request->name;みたいな）
    データを代入してそのままユーザを作成することができます
    save() について、おさらいしましょう。 save() では、1つずつ、
    データを代入し保存するしかできない
    
    create() は一気にデータを代入することができますが、
    全ての項目がデフォルトで「一気に保存可能」になっていると
    変なデータが勝手に保存される可能性があります。セキュリティ上、良いことではありません。
    
    そこで通常は、全てのカラムをデフォルトでは「一気に保存不可」とし
    $fillable で「一気に保存可能」なパラメータを指定することで
    想定していないパラメータへのデータ代入を防ぎ、なおかつ
    一気にデータを代入することが可能になります。
    */

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}
