## ElasticSearch Demo
`Elastic Stack`学习demo，已写好`docker-compose.yml`，可直接部署

### 依赖
- docker 19.03+
- docker-compose 1.27+


### 环境搭建

1. 构建编排容器 
    ```shell script
    docker-compose build
    ```

2. 开启服务
    ```shell script
    docker-compose up # 首次开启
    # 再次开启服务 docker-compose start
    # 关闭服务 docker-compose stop
    ```

3. 在浏览器依次打开`127.0.0.1:9200`[es],`127.0.0.1:5601`[kibana]检查服务是否正常运行 

4. 具体需要导入什么数据？

    > 相关内容请查看`./logstash/pipeline/logstash-simple.conf` 文件

### 指导文档

- [elasticsearch 官方文档](https://www.elastic.co/guide/en/elasticsearch/reference/6.0/getting-started.html)
- [kibana 官方文档](https://www.elastic.co/guide/en/kibana/current/introduction.html)
- [logstash 官方文档](https://www.elastic.co/guide/en/logstash/7.10/introduction.html)
- [环境搭建知道文章](https://towardsdatascience.com/how-to-synchronize-elasticsearch-with-mysql-ed32fc57b339)


### 免责声明

项目本人仅练手用，有bug也是正常的~
