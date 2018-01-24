namespace java com.jnudeveloper.blog.thriftgen.domain
namespace php thriftgen.domain

struct TComment {
    1: i32 id,
    2: i32 postId,
    3: i32 parentId,
    4: i32 status,
    5: string content,
    6: i32 createTime,
    7: i32 updateTime,
    8: i32 authorId,
    9: i32 approveNum,
}