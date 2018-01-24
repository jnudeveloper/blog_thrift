namespace java com.jnudeveloper.blog.thriftgen.service
namespace php thriftgen.service

include 'io.thrift'

service PostService {
    // ping接口，用于检查服务是否可用
    i32 ping(1:i32 seq),

    io.Response findAll(1:io.Request req),
    io.Response findById(1:io.Request req),
    io.Response create(1:io.Request req),
    io.Response createWithTags(1:io.Request req),
    io.Response update(1:io.Request req),
    io.Response updateWithTags(1:io.Request req),
    io.Response deleteById(1:io.Request req),
}