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


                $image_hight = $this->request->data['image_hight[]'];
                $image_weight = $this->request->data['image_weight[]'];


echo "<pre>";

                print_r($image_hight);
                print_r($image_weight);

                die();

                $filename = $this->request->data['image']['tmp_name'];
                //   $try = $this->request->data['image']['tmp_name'];

                $ext = ".jpg";  ///get ext

                list($width, $height) = getimagesize($filename);
//                var_dump($name);
//
//                die();

                $src = imagecreatefromjpeg($filename);

//                var_dump($src);
//                die();

                $newheight = $image_hight;
                $newwidth = $image_weight;                   /// variable()
                /// $newheight = $newhight;      /// ($height / $width) * $newwidth;
                $tmp = imagecreatetruecolor($newwidth, $newheight);


                imagecopyresampled($tmp, $src, 0, 0, 0, 0, $newwidth, $newheight, $width, $height);


                var_dump($src);


//                $new_image =   $filename;
//
//                var_dump($new_image);
//
//
                imagejpeg($tmp, $filename, 100);
//                var_dump($try);

                $rnd_name = 'photos_' . uniqid(mt_rand(10, 15)) . '_' . time() . '_50x50.' . $ext;


                $url = Router::url('/', true) . 'image/' . $rnd_name;
                $uploadpath = 'image/';
                $uploadfile = $uploadpath . $rnd_name;

//                $this->request->data['image']['tmp_name']
                if (move_uploaded_file($filename, $uploadfile)) {

                    $post = $this->Posts->newEntity();
                    $post->name = $filename;
                    $post->image = $url;
                    if ($this->Posts->save($post)) {
                        $this->Flash->success(__('File Upload'));

                    } else {
                        $this->Flash->error(__('File Upload Fail              1'));
                    }
                } else {
                    $this->Flash->error(__('File Upload Fail                     2'));
                }
            } else {
                $this->Flash->error(__('choose file'));
            }
        }

        $this->set('post', $post);

    }
}