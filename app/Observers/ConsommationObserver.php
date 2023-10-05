<?php

namespace App\Observers;

use App\Models\Consommation;

class ConsommationObserver
{
    /**
     * Handle the Consommation "created" event.
     */
    public function created(Consommation $consommation): void
    {
        //
        // Mettez à jour la valeur de la consommation totale ici
        $totalPower = Consommation::selectRaw('equipment_id, AVG(value) / 1000 as average_power_kwh')
        ->groupBy('equipment_id')
        ->sum('average_power_kwh');
    

    // Mettez à jour la valeur de la consommation totale dans un endroit approprié, par exemple, dans une table de configuration
    config(['app.consumption_total' => $totalPower]);
    }

    /**
     * Handle the Consommation "updated" event.
     */
    public function updated(Consommation $consommation): void
    {
        //
    }

    /**
     * Handle the Consommation "deleted" event.
     */
    public function deleted(Consommation $consommation): void
    {
        //
    }

    /**
     * Handle the Consommation "restored" event.
     */
    public function restored(Consommation $consommation): void
    {
        //
    }

    /**
     * Handle the Consommation "force deleted" event.
     */
    public function forceDeleted(Consommation $consommation): void
    {
        //
    }
}
