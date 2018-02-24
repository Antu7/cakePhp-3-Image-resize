<?php

namespace App\Controller;

use Cake\Routing\Router;

class PostController extends AppController
{
    public function initialize()
    {
        parent::initialize();
        $this->loadModel('Posts');
    }

    public function index()
    {

    }

    public function index2()
    {
        $post = "";
        if ($this->request->is('post')) {
            if (!empty($this->request->data['image']['name'])) {


                $uploadImg = $this->_move_image($this->request->data['image']);



                $image_hight = $this->request->data['image_hight'];
                $image_weight = $this->request->data['image_weight'];

                $path2 = WWW_ROOT . 'image/';

                $count = $image_hight;


                $filename = $uploadImg;
                $ext = ".jpg";  ///get ext

                list($width, $height) = getimagesize($filename);
                $src = imagecreatefromjpeg($filename);


                for ($i = 0; $i < count($count); $i++) {


                    $newheight = $image_hight[$i];
                    $newwidth = $image_weight[$i];


                    $tmp = imagecreatetruecolor($newwidth, $newheight);

                    imagecopyresampled($tmp, $src, 0, 0, 0, 0, $newwidth, $newheight, $width, $height);

                    imagejpeg($tmp, $path2 . 'a' . $i . 'jpg', 100 );

                    $rnd_name = 'photos_' . uniqid(mt_rand(10, 15)) . '_' . time() . '_50x50.' . $ext;

                    $url = Router::url('/', true) . 'image/' . $rnd_name;

                    $uploadpath = 'image/';

                    $uploadfile = $uploadpath . $rnd_name;




                    if (move_uploaded_file($filename, $uploadfile)) {
                        $post = $this->Posts->newEntity();
                        $post->name = $filename;
                        $post->image = $url;
                        if ($this->Posts->save($post)) {
                            $this->Flash->success(__('File Upload second'));
                        } else {
                            $this->Flash->error(__('File Upload Fail      1'));
                        }
                    } else {
                        $this->Flash->error(__('File Upload Fail    2 second'));
                    }
                }
            } else {
                $this->Flash->error(__('choose file'));
            }
        }
        $this->set('post', $post);
    }


    private function _move_image($uploadImg)
    {
        $path = WWW_ROOT . 'image/main' . $uploadImg['name'];


        move_uploaded_file($uploadImg['tmp_name'], $path);

        return $path;
    }
}
