<?php


class EntityValidator extends Illuminate\Validation\Validator {
	

	public function validateBody($attribute, $value, $parameters)
    {

    	return true;
    }

    public function validateOpeningHours($attribute, $value, $parameters) {

        return true;
    }

    public function validateAmenities($attribute, $value, $parameters) {

        return true;
    }

    public function validateLocation($attribute, $value, $parameters) {

        return true;
    }

    public function validateMap($attribute, $value, $parameters) {
    	return true;
    }

    public function validatePrice($attribute, $value, $parameters) {

        return true;
    }
}


?>