namespace java com.blog.thrift.domain
namespace php thriftgen.domain

struct TComment {
    1: i32 id,
    2: i32 post_id,
    3: i32 parent_id,
    4: i32 status,
    5: string content,
    6: i32 create_time,
    7: i32 update_time,
    8: i32 author_id,
    9: i32 approve_num,
}