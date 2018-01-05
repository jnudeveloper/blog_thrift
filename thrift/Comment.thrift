namespace java com.blog.thrift.domain
namespace php common.thrift.gen.domain

struct Comment {
    1: int id,
    2: int post_id,
    3: int parent_id,
    4: int status,
    5: string content,
    6: int create_time,
    7: int update_time,
    8: int author_id,
    9: int approve_num,
}