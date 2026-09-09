<?php

namespace Tests\Feature;

use Tests\TestCase;

class testSiteReponse extends TestCase
{
    /**
     * Vérifie que la page d'accueil contient le texte "Let's get started".
     */
    public function test_main_page_has_lets_get_started(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
}
