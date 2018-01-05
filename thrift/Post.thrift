namespace java com.blog.thrift.domain
namespace php common.thrift.gen.domain

struct Post {
    1: int id,
    2: string title,
    3: string summary,
    4: string content,
    5: int status,
    6: int create_time,
    7: int update_time,
    8: int author_id,
    9: int approve_num,
    10: int collect_num,
    11: int comment_num,
}
