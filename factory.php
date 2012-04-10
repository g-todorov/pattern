<?php
class Factory_example //sydyrja logikata v sebe si za da se spesti izlishnoto pisane na if-ove i els-ove
{
    public static function factory($type) //statichna funkciq za da imame dostyp bez instanciq
    {
        if (include_once 'Drivers/' . $type . '.php') {  //pri izvikvaneto na funkciqta na mqstoto na &type shte 
            $classname = 'Driver_' . $type;				// stoi mysql naprimer...ili za kakvoto ni trqbvat driveri
            return new $classname;						//ako nqma, hvyrlq exception
        } else {
            throw new Exception ('Драйверът не е намерен');
        }
    }
}
?>
