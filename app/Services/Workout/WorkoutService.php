<?php 

namespace App\Services\Workout;

use App\Repositories\Workout\WorkoutRepository;

class WorkoutService 
{
    protected $workoutRepository;

    public function __construct(WorkoutRepository $workoutRepository) 
    {
        $this->workoutRepository = $workoutRepository;
    }

    public function getAllWorkouts() 
    {
        return $this->workoutRepository->all();
    }
}