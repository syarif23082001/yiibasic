<?php  
namespace app\models;

use yii\db\ActiveRecord;

/**
 * 
 */
class Country extends ActiveRecord
{
	public static function tablename()
	{
		return 'country';
	} 
}
?>