provider "aws" {
  region = "us-east-1"
}
resource "aws_instance" "consulter" {
  ami           = "ami-0c55b159cbfafe1f0"
  instance_type = "t3.micro"
  key_name      = "sua-chave-ec2"
  user_data     = file("userdata.sh")
  vpc_security_group_ids = [aws_security_group.web.id]
  tags = {
    Name = "consulter-prect"
  }
}
resource "aws_security_group" "web" {
  name        = "sg-consulter-web"
  ingress { from_port = 22 to_port = 22 protocol = "tcp" cidr_blocks = ["0.0.0.0/0"] }
  ingress { from_port = 80 to_port = 80 protocol = "tcp" cidr_blocks = ["0.0.0.0/0"] }
  ingress { from_port = 443 to_port = 443 protocol = "tcp" cidr_blocks = ["0.0.0.0/0"] }
  egress  { from_port = 0  to_port = 0  protocol = "-1" cidr_blocks = ["0.0.0.0/0"] }
}