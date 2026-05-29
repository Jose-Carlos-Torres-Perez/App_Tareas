
PHP
<?php

use App\Models\User;
use App\Models\Project;

it('bloquea el acceso a proyectos ajenos', function () {

    $otroUsuario = User::factory()->create();

    // Esta es la forma limpia en Laravel para asociar el usuario sin romper el título de la fábrica
    $proyectoAjeno = Project::factory()
        ->for($otroUsuario) 
        ->create();

    $usuario = User::factory()->create();

    $this->actingAs($usuario)
        ->get("/projects/{$proyectoAjeno->id}")
        ->assertForbidden(); 
});
