<?php

namespace app\modules\soporte\models;

use Yii;
use yii\helpers\Html;
use yii\behaviors\TimestampBehavior;

/**
 * This is the model class for table "inv_bajas".
 *
 * @property integer $id
 * @property integer $progresivo
 * @property integer $id_tipo
 * @property integer $marca
 * @property integer $modelo
 * @property string $serie
 * @property integer $estado_baja
 * @property integer $tipo_baja
 * @property integer $id_periodo
 * @property integer $id_plantel
 * @property integer $id_area
 * @property integer $id_piso
 * @property string $fecha_baja
 * @property string $observaciones
 * @property string $dictamen
 * @property integer $bloq
 * @property string $created_at
 * @property integer $created_by
 * @property string $updated_at
 * @property integer $updated_by
 *
 * @property Users $createdBy
 * @property Users $updatedBy
 */
class InvBajas extends \yii\db\ActiveRecord
{
    public function behaviors()
{
    return [
        TimestampBehavior::className(),
    ];
}
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'inv_bajas';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['progresivo', 'id_tipo', 'marca', 'modelo', 'estado_baja', 'tipo_baja', 'id_periodo', 'id_plantel', 'id_area', 'id_piso', 'bloq', 'created_by', 'updated_by'], 'integer'],
            [['serie', 'observaciones', 'dictamen'], 'string'],
            [['id','progresivo','id_tipo','marca','modelo','serie','estado_baja','tipo_baja','id_periodo','id_plantel','id_area','id_piso','fecha_baja','observaciones','dictamen','bloq','created_at','created_by','updated_at','updated_by','certificado'], 'safe'],
            [['id','progresivo','id_tipo','marca','modelo','serie','estado_baja','tipo_baja','id_periodo','id_plantel','id_area','id_piso','fecha_baja','dictamen','bloq','certificado'], 'required'],
            [['created_by'], 'exist', 'skipOnError' => true, 'targetClass' => Users::className(), 'targetAttribute' => ['created_by' => 'user_id']],
            [['updated_by'], 'exist', 'skipOnError' => true, 'targetClass' => Users::className(), 'targetAttribute' => ['updated_by' => 'user_id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'progresivo' => 'Progresivo',
            'id_tipo' => 'Id Tipo',
            'marca' => 'Marca',
            'modelo' => 'Modelo',
            'serie' => 'Serie',
            'estado_baja' => 'Estado Baja',
            'tipo_baja' => 'Tipo Baja',
            'id_periodo' => 'Id Periodo',
            'id_plantel' => 'Id Plantel',
            'id_area' => 'Id Area',
            'id_piso' => 'Id Piso',
            'fecha_baja' => 'Fecha Baja',
            'observaciones' => 'Observaciones',
            'dictamen' => 'Dictamen',
            'bloq' => 'Bloq',
            'created_at' => 'Created At',
            'created_by' => 'Created By',
            'updated_at' => 'Updated At',
            'updated_by' => 'Updated By',
            'certificado' => 'Certificado',

        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCreatedBy()
    {
        return $this->hasOne(Users::className(), ['user_id' => 'created_by']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUpdatedBy()
    {
        return $this->hasOne(Users::className(), ['user_id' => 'updated_by']);
    }
          public function getCatEstadoBajas()
    {
        return $this->hasOne(CatEstadoBajas::className(),['id'=>'estado_baja']);
    }
          public function getCatAreas()
    {
        return $this->hasOne(CatAreas::className(),['id'=>'id_area']);
    }
          public function getCatAnos()
    {
        return $this->hasOne(CatAnos::className(),['id'=>'id_periodo']);
    }
              public function getCatPlanteles()
    {
        return $this->hasOne(CatPlanteles::className(),['id'=>'id_plantel']);
    }
              public function getCatPiso()
    {
        return $this->hasOne(CatPiso::className(),['id'=>'id_piso']);
    }
}
