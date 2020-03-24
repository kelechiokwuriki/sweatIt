<?php 

namespace App\Repositories\Workout;

use App\Repositories\BaseRepository;
use App\Models\Workout;

class WorkoutRepository extends BaseRepository 
{
    public function __construct(Workout $workoutModel) 
    {
        parent::__construct($workoutModel);
    }
}