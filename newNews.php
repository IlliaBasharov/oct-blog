<?php

class newNews {

    public $title;
    public $text;
    public $date_time;
    public $date_change;
    public $image_path;

    public function __construct() {
        $this->title = filter_input(INPUT_POST, 'title');
        $this->text = filter_input(INPUT_POST, 'content');
        $this->date_time = filter_input(INPUT_POST, 'date');
        $date_components = explode('T', $this->date_time);
        $today = date('H:m:s');
        $this->date_time = $date_components[0] . ' ' . $today;
        $this->date_change = $this->date_time;
    }

    public function validator($title, $text) {
        if (empty($title) || strlen($title) > 255) {
            return false;
        } else if (empty($text)) {
            return false;
        }
        return true;
    }

    public function fileValidator() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $documents = $_FILES['document'];
            if (empty($documents)) {
                echo 'Отсутствует изображение для загрузки.';
                exit();
            } else {
                foreach ($documents['error'] as $i => $error) {
                    if ($error !== 0) {
                        $message = $this->codeToMessage($error);
                    } else if (!in_array($documents['type'][$i], AVAILABLE_TYPES)) {
                        $message = 'Недопустимый тип файла';
                    } else if ($documents['size'][$i] > MAX_UPLOAD_DOC_SIZE) {

                        $message = 'Размер файла слишком большой!';
                    } else {
                        $file_name = $documents['name'][$i];
                        if (!file_exists(UPLOAD_DOC_DIR)) {
                            mkdir(UPLOAD_DOC_DIR, 0777, true);
                        }
                        $file_path = UPLOAD_DOC_DIR . DIRECTORY_SEPARATOR . $file_name;
                        if (!move_uploaded_file($documents['tmp_name'][$i], $file_path)) {
                            $message = 'перемещение загруженного файла не удалось!';
                        } else {
                            $message = 'загрузка произведена успешно!';
                        }
                    }
                }
            }
            return $message;
        }
    }

    private function codeToMessage($code) {
        switch ($code) {
            case UPLOAD_ERR_INI_SIZE:
                $message = "The uploaded file exceeds the upload_max_filesize directive in php.ini";
                break;
            case UPLOAD_ERR_FORM_SIZE:
                $message = "The uploaded file exceeds the MAX_FILE_SIZE directive that was specified in the HTML form";
                break;
            case UPLOAD_ERR_PARTIAL:
                $message = "The uploaded file was only partially uploaded";
                break;
            case UPLOAD_ERR_NO_FILE:
                $message = "No file was uploaded";
                break;
            case UPLOAD_ERR_NO_TMP_DIR:
                $message = "Missing a temporary folder";
                break;
            case UPLOAD_ERR_CANT_WRITE:
                $message = "Failed to write file to disk";
                break;
            case UPLOAD_ERR_EXTENSION:
                $message = "File upload stopped by extension";
                break;

            default:
                $message = "Unknown upload error";
                break;
        }
        return $message;
    }

    private function imageHash($image) {
        $image = hash("md5", $image);
        return $image;
    }

}
