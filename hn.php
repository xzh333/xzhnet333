<?php
$id= isset($_GET['id'])?$_GET['id']:'hnjs';

$n = [
    'hnjs'   => '280', //���Ͼ���
    'hnyl'   => '344', //��������
    'hndy'   => '221', //���ϵ�Ӱ
    'hnds'   => '346', //���϶���
    'hndsj'  => '484', //���ϵ��Ӿ�
    'hngg'   => '261', //���Ϲ���
    'hngj'   => '229', //���Ϲ���
    'jyjs'   => '316', //��ӥ��ʵ
    'jykt'   => '287', //��ӥ��ͨ
    'xfpy'   => '329', //�ȷ�ƹ��
    'klcd'   => '218', //���ִ���
    'cpd'    => '578', //��Ƶ��
    'csxwzh' => '269', //��ɳ�����ۺ�
    'cszfpd' => '254', //��ɳ����Ƶ��
    'csnxpd' => '230', //��ɳŮ��Ƶ��
    'klg'    => '267', //���ֹ�
];

if (!array_key_exists($id, $n)) { die(); }

$info = explode('&', $n[$id]);
$url = 'http://pwlp.bz.mgtv.com/v1/epg/turnplay/getLivePlayUrlMPP?version=PCweb_1.0&platform=1&buss_id=2000001&channel_id='.$info[0];
//var_dump($url);
$data = file_get_contents($url);
$json = json_decode($data);
$m3u8 = $json -> data -> url;
header('Location: '.$m3u8);
//echo $m3u8;
?>