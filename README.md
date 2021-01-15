## elastic_search_demo
elasticsearch学习demo

## 环境搭建

1. 搭建elastsearch服务
```shell script
docker run -p 9200:9200 -p 9300:9300 -e "discovery.type=single-node" docker.elastic.co/elasticsearch/elasticsearch:7.10.2
```