namespace java com.blog.thrift.domain
namespace php common.thrift.gen.domain

struct CUDResult {
    1: int code, // 错误码, 成功：0
    2: int id, // 主键编号，失败时返回空
    3: string information, // 错误信息
}