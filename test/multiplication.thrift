namespace java com.blog.thrift.service
namespace php thriftgen.service

typedef i32 int 

service MultiplicationService
{
	int multiply(1:int n1, 2:int n2),
}