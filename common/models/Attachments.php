<?php
    namespace common\models;
    use Yii;
    use Yii\db\ActiveRecord;
    use Yii\web\UploadedFile;
    /**
     * Class Attachments
     * @package common\models
     * @property int $id unique person identifier
     * @property string $folder folder / user to store image
     * @property array $avatar generated filename on server
     * @property string $filename source filename form cliente
     */
    class Attachments extends ActiveRecord{
        /**
         * @var mixed image the attribute for rendering the file input
         * widget for upload on the upload
         */
        public $attachments;
        public $attachmentsExtentions;
        // 
        public function rules()
        {
            # code...
            return [
                [['name', 'avatar', 'filename', 'attachments'], 'safe'],
                [['attachments'], 'file', 'extensions' => 'jpg, png, pdf'],
            ];
        }
        /**
         * fetch stored image file name with complete path
         * @return string
         */
        public function getImageFile()
        {
            return isset($this->avatar) ? Yii::$app->params['uploadPath'] . $this->avatar: null;
        }
        /**
         * fetch stored image url
         * @return string
         */
        public function getImageUrl()
        {
            $avatar = isset($this->avatar) ? $this->avatar:'petimagem_default.jpg';
            return Yii::$app->params['uploadUrl'] . $avatar;
        }
        /**
         * Process upload image or pdf
         * @return mixed uploaded file instance
         */
        public function uploadImagem()
        {
            // get image instance.
            // for multiple file uploads the following data will return an array
            // to do this we need use getInstances
            $attachments = UploadedFile::getInstances($this, 'attachments');
            if (empty($attachments)) {
                return false;
            }
            //  store the source file name
            $this->filename = UploadedFile::getInstancesByName($attachments);
            $attachmentsExtentions = end((explode(".", $attachments)));

        }
    }