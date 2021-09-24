<?php 
use App\Models\Option;

function getOption ($key, $defaultValue = null)
{
    $retVal = $defaultValue;
    $option = Option::where('key', $key)->first();
    if(isset($option) && $option->value) {
        switch ($option->type) {
            case 'json':
                $retVal = json_decode($option->value);
                break;
            default:
                $retVal = $option->value;
                break;
        }
        
    }
    return $retVal;
}