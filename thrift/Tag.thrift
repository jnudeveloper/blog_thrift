namespace java com.blog.thrift.domain
namespace php thriftgen.domain

struct Tag {
    1: i32 id,
    2: string name,
    3: i32 frequency,
    4: i32 create_time,
    5: i32 update_time,
    6: i32 status,
}