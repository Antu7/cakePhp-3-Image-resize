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


                $image_hight = $this->request->data['image_hight'];
                $image_weight = $this->request->data['image_weight'];

                $count = $image_hight;


                $filename = $this->request->data['image']['tmp_name'];


                $ext = ".jpg";  ///get ext

                list($width, $height) = getimagesize($filename);

                $src = imagecreatefromjpeg($filename);

                for ($i = 0; $i < count($count); $i++) {
//                    $my_count = $i;
                    // echo  $my_count;
                    $newheight = $image_hight[$i];
                    $newwidth = $image_weight[$i];                   /// variable()
                    /// $newheight = $newhight;      /// ($height / $width) * $newwidth;
                    $tmp = imagecreatetruecolor($newwidth, $newheight);


                    imagecopyresampled($tmp, $src, 0, 0, 0, 0, $newwidth, $newheight, $width, $height);


                    imagejpeg($tmp, $filename, 100);


                    $rnd_name = 'photos_' . uniqid(mt_rand(10, 15)) . '_' . time() . '_50x50.' . $ext;


                    $url = Router::url('/', true) . 'image/' . $rnd_name;
                    $uploadpath = 'image/';
                    $uploadfile = $uploadpath . $rnd_name;
                    var_dump($filename);
                    echo "<br>";

                    $filename = $this->request->data['image']['tmp_name'];


//                    if ($my_count == 1) {
//                        $filename = $filename . 'name';
//                        var_dump($filename);
//                        echo "<br>";
//                        if (move_uploaded_file($filename, $uploadfile)) {
//
//                            $post = $this->Posts->newEntity();
//                            $post->name = $filename;
//                            $post->image = $url;
//                            if ($this->Posts->save($post)) {
//                                $this->Flash->success(__('File Upload first'));
//
//                            } else {
//                                $this->Flash->error(__('File Upload Fail              1'));
//                            }
//                        } else {
//                            $this->Flash->error(__('File Upload Fail                     2 first'));
//                        }
//                    } else {}


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
}