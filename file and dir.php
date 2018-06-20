<?php

#判断文件类型
    is_dir()    //判断是否是目录
    is_file()    //判断是否是文件

#文件属性
    file_exists()   //检测文件或目录是否存在
    filesize()      //获取文件大小
    #获取相关时间
        filectime(文件路径)    //创建时间  create
        filemtime(文件路径)    //修改时间  modify
        fileatime(文件路径)    //访问时间  active

    touch()     //设置文件的修改时间,没有文件就创建文件
    copy()      //复制文件
    rename()    //重命名文件，也可以剪切文件

    fopen()     //打开文件,打开方式有[r,r+,a,a+]
    fwrite()    //写入内容,写入的位置由打开方式决定
    fread()     //读取文件,长度必须大于0
    fclose()    //关闭文件

#目录的操作
    opendir()   //打开一个目录
    readdir()   //读取一个目录资源
    closedir()  //关闭一个目录

#字符集转换
    iconv(原字符集, 目标字符集, 字符串)

    mkdir('目录'[, 权限, true]);    //创建目录,可递归创建目录
    rmdir();    //删除目录,只能删除空目录
    unlink();   //删除文件,无法删除http绝对路径的文件

#简单的文件读写
    file_get_contents(文件路径) //读取文件内容,返回文件内容的字符串
    file_put_contents(文件路径，写的内容[, FILE_APPEND]) //写入内容文件不存在就创建；默认为覆盖内容，可以用第3个参数设置为

#文件的上传

    /*1、表单的设置
        1.要做文件上传，method必须使用post
        2.必须在form标签里面加：enctype="multipart/form-data"
        3.<input type="hidden" name="MAX_FILE" value="指定文件上传的大小，单位为字节" />
    
    2、php代码处理文件的上传
            1. 上传后的数据用$_FILES接收。
            2. $_FILES中每个元素的意思
                name    上传的文件名
                type    文件类型
                tmp_name    临时文件路径
                    文件上传的原理：就是在脚本执行完毕之前将文件从这个临时路径里面弄出来，因为这货会在脚本执行完毕后自动删除
                error   错误号 
                    有0、1、2、3、4、6、7,手册有详细说明
                size    文件大小，单位为字节
执行文件上传：
    move_uploaded_file(临时文件名, 新文件名);
    本函数检查文件是否是合法的上传文件

完整的文件上传步骤
    1、判断错误号
    2、判断文件的mime类型
    3、判断文件的大小
    4、生成随机的文件名
        uniqid()
            获取一个带前缀、基于当前时间微秒数的唯一ID
    5、获取文件的后缀名
    6、判断并执行文件上传
        is_uploaded_file()
            判断文件是否是通过 HTTP POST 上传的

文件下载：
    将文件从服务器下载到客户端
    注意：如果浏览器能够识别该文件的mime类型，会直接解析；如果不能识别，则提供下载

    所以，我要手动告诉浏览器，这是一个附件，你不要给我解析出来

    步骤：
        1.告诉它是一个附件
            header('Content-disposition:attachment')
        2.下载的文件没内容
            在php输出的内容会被下载
            用readfile()读取并输出
        3.结合第1步，给文件取个名字
            header('Content-disposition:attachment;filename=xxoo.jpg')
        4.告诉它文件的大小
            header('Content-length:'.filesize('文件路径'));
        5.告诉它文件的类型
            header('Content-type:image/jpeg');