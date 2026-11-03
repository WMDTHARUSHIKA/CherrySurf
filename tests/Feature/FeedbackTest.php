<?php

namespace Tests\Feature;

use App\Models\Feedback;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class FeedbackTest extends TestCase
{
    use RefreshDatabase;

    public function test_contact_page_shows_the_five_most_recent_feedback_entries(): void
    {
        foreach (range(1, 6) as $number) {
            $feedback = Feedback::create([
                'name' => "Visitor {$number}",
                'email' => "visitor{$number}@example.com",
                'message' => "Feedback message {$number}",
                'rating' => 5,
            ]);
            $feedback->created_at = now()->subDays(6 - $number);
            $feedback->save();
        }

        $this->get(route('contact'))
            ->assertOk()
            ->assertDontSee('Feedback message 1')
            ->assertSeeInOrder([
                'Feedback message 6',
                'Feedback message 5',
                'Feedback message 4',
                'Feedback message 3',
                'Feedback message 2',
            ]);
    }

    public function test_submitted_feedback_is_saved_and_shown_on_the_contact_page(): void
    {
        $feedback = [
            'name' => 'Wave Rider',
            'email' => 'rider@example.com',
            'message' => 'Had a great experience.',
            'rating' => 5,
        ];

        $this->post(route('feedback.store'), $feedback)
            ->assertRedirect(route('contact'))
            ->assertSessionHas('success');

        $this->assertDatabaseHas('feedback', $feedback);

        $this->get(route('contact'))
            ->assertOk()
            ->assertSee('Wave Rider')
            ->assertSee('Had a great experience.');
    }
}
