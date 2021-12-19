<?php

namespace frontend\controllers;

use frontend\models\Nickname;

class NicknameController extends \yii\web\Controller
{
    public function actionIndex($id = null)
    {
        if (!is_numeric($id)) {
            echo "请指定用户ID";
            exit(900);
        }
        $userModel = Nickname::findOne($id);
        if (empty($userModel)) {
            echo "该用户不存在";
            exit(900);
        }

        $user = $userModel->getAttributes();
        $genderMap = [
            0 => '保密',
            1 => '♂',
            2 => '♀',
        ];

        return $this->render(
            'index',
            [
                'now'    => date('Y-m-d H:i:s'),
                'name'   => $user['nickname'],
                'avatar' => $user['avatar'],
                'gender' => $genderMap[$user['gender']],
            ]
        );
    }

}
