<?php
use Dippuzen\Meetings\Models\Meeting;

Route::get('api/meetings/all', function () {
    $meetings = Meeting::all();
    
    // $carsList = array();
    // foreach ($cars as $car) 
    // {   
    //     $data = json_decode($car,true);
    //     array_push( $carsList, $data['car_image'][0] );
    // }
    return $meetings;
    
});

Route::get('api/month/{month}', function ($month) {
    
    $meetings = Meeting::all();
    $meetingList = array();
    
    foreach ($meetings as $meeting) {
        
        $newDate = date("n",strtotime($meeting->date));
        if($newDate == $month){
        
        array_push( $meetingList, $meeting );
            
        }
        
    }
    return $meetingList;
});