# ali-oss-sdk
    
    $stor = Storage::disk("images");
    $filePath = "parking/".Str::random(42).".jpg";
    $file = fopen("http://192.168.2.167/ftpdir/pic/Recognize/20200409/192.168.2.168_2020040915453200000_0502.jpg","r");
    $filePath = $stor->put($filePath, $file);

在config/filesystems.php中设置链接信息
        
    'images'=>[
        'driver' => 'alioss',
        'key' => "LTAI4FskYbP8pKVC1WXZ4Cs8",
        "secret" => "8yHuFoyPsnnL4mIXISyh9RMJEFLacq",
        "endpoint" => "http://oss-cn-shanghai.aliyuncs.com",
        "isCName" => false,
        "securityToken" => NULL,
        "requestProxy" => NULL,
        "bucket" => "parkinglangge"
    ]
