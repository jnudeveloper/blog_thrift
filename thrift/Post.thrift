namespace java com.jnudeveloper.blog.thriftgen.domain
namespace php thriftgen.domain

struct TPost {
    1: i32 id,
    2: string title,
    3: string summary,
    4: string content,
    5: i32 status,
    6: i32 createTime,
    7: i32 updateTime,
    8: i32 authorId,
    9: i32 approveNum,
    10: i32 collectNum,
    11: i32 commentNum,
}
