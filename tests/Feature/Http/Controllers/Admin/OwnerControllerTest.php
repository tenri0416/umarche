<?php

namespace Tests\Feature\Http\Controllers\Admin;

use App\Models\Owner;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class OwnerControllerTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function setUp(): void
    {
        parent::setUp();
        $admin = User::factory()->create();
        // 'admin' ガードを指定して認証情報を提供
        //特定のユーザーを認証済みユーザーとして模倣（acting）するためのメソッドです。このメソッドを使用することで、
        //テストケース内で特定のユーザーアカウントに関連付けられたアクションを実行できます。
        $this->actingAs($admin, 'admin');
    }
    /**
     * @test
     */
    public function オーナコントローラルーティングtest(): void
    {
        //ログイン済みの場合
        // $this->assertAuthenticated($guard = null);
        //未ログイン
        //$this->assertGuest($guard = null);
        //リソース(Route::resourc)の場合
        //routeで指定 また最初にadminでadmin.phpを指定する
        $resupons = $this->assertAuthenticated($guard = null)
            ->get(route('admin.owners.index'));

        $resupons->assertStatus(200)
            ->assertViewIs('admin.owners.index')
            ->assertViewHas(['owners']);
    }
    /**
     * @test
     */
    // public function indexでデータを取得test(): void
    // {
    //     $owner = Owner::factory()->create();

    //     $this->assertModelExists($owner);
    // }
}
