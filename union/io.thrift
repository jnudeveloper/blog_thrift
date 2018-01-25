namespace java com.jnudeveloper.blog.thriftgen.domain
namespace php thriftgen.domain

// 请求结构
struct Request
{
    1:i64    clientIp,     // 调用方IP地址
    2:i32    appId,        // 业务AppID
    3:string appKey,       // 业务AppKey
    4:string requestId,    // 请求ID，追踪调试用
    5:i64    requestTime,  // 请求时间/毫秒
    6:string data,         // 请求数据（json encode后）
    7:string version,      // 版本号
}

// 输出结构
struct Response
{
    1:i32    code,         // 返回码（成功返回0，非0表示有错误发生）
    2:string msg,          // 错误消息
    3:string data,         // 接口返回数据（json encode后）
}