namespace java com.blog.thrift.domain
namespace php common.thrift.gen.domain

struct Tag {
    1: int id,
    2: string name,
    3: int frequency,
    4: int create_time,
    5: int update_time,
    6: int status,
}