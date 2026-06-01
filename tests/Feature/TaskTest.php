<?php

use App\Models\Project;
use App\Models\User;

it('requiere un título para crear una tarea', function () {
   
   
    $user = User::factory()->create(['email_verified_at'=> now(),]);
    $proyecto = Project::factory()->create(['user_id' => $user->id]);

   
     //$this->withoutExceptionHandling();
    $response = $this->actingAs($user)
        ->from("/projects/{$proyecto->id}") // Buena práctica
        ->post("/projects/{$proyecto->id}/tasks", [
            'title' => '', // Enviamos el título vacío para forzar el fallo
        ]);

    $response->assertSessionHasErrors('title');
});