<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;
use App\Models\Schedule; // Assurez-vous d'importer le modèle Schedule approprié

// Heure actuelle au format HH:MM
$currentHour = Carbon::now()->format('H:i');

// Récupérez tous les horaires actifs depuis la base de données
$schedules = Schedule::where('start_time', '<=', $currentHour)
    ->where('end_time', '>', $currentHour)
    ->where('active', true)
    ->get();

foreach ($schedules as $schedule) {
    // Vérifiez si la commande n'a pas déjà été envoyée pour le début
    if (!$schedule->start_command_sent) {
        // Envoyez une commande avec la valeur 1 à l'ESP32 pour le début.
        // Vous devrez mettre en œuvre la logique d'envoi ici pour le début.

        // Marquez cet horaire comme "start_command_sent" pour éviter de l'envoyer à nouveau.
        $schedule->update(['start_command_sent' => true]);
    }
}

// Pour les horaires qui ont dépassé leur heure de fin
$expiredSchedules = Schedule::where('end_time', '<=', $currentHour)
    ->where('end_command_sent', false)
    ->get();

foreach ($expiredSchedules as $expiredSchedule) {
    // Envoyez une commande avec la valeur 0 à l'ESP32 pour la fin.
    // Vous devrez mettre en œuvre la logique d'envoi ici pour la fin.

    // Marquez cet horaire comme "end_command_sent" pour éviter de l'envoyer à nouveau.
    $expiredSchedule->update(['end_command_sent' => true]);
}
