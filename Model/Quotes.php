<?php

namespace Kanboard\Plugin\HelloHarmozi\Model;

/**
 * A small, bundled set of Alex Hormozi quotes. A Hello Dolly homage —
 * self-contained, no network, no config.
 */
class Quotes
{
    /** @return string[] */
    public static function all(): array
    {
        return [
            'The market pays for value. Nothing else.',
            'Volume negates luck.',
            'Discipline is doing it when you don\'t feel like it.',
            'You are one skill away from changing your entire life.',
            'The person who needs the exchange less always has the upper hand.',
            'Boredom is the enemy, not some evil person.',
            'Your greatest source of leverage is the work you\'re avoiding.',
            'Rejection is a tax you pay to reach your goals.',
            'Do more. That\'s it. That\'s the tweet.',
            'Confidence is just evidence you\'ve kept promises to yourself.',
            'You don\'t need more time, you need fewer distractions.',
            'The goal is not to be busy. The goal is to be effective.',
            'Nobody is coming to save you. Good. That means it\'s up to you.',
            'Fall in love with the process and the results will come.',
            'Successful people do what unsuccessful people won\'t.',
            'The best time to double down is when it\'s working.',
            'Make the offer so good people feel stupid saying no.',
            'Patience plus persistence equals compounding.',
        ];
    }

    public static function random(): string
    {
        $all = self::all();
        return $all[array_rand($all)];
    }
}
