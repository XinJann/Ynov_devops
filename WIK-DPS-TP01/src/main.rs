use actix_web::{get, App, HttpResponse, HttpServer, Responder, HttpRequest};
use actix_web::http::header::ContentType;
use gethostname::gethostname;
use std::env;

#[get("/ping")]
async fn ping(req: HttpRequest) -> impl Responder {
    let headers: &actix_web::http::header::HeaderMap = req.headers();

    let mut json_string = "{".to_owned();
    for (key,value) in headers {
        json_string.push_str(&format!("\"{}\":\"{}\",",key,value.to_str().unwrap()));
    }
    json_string.pop();
    json_string.push_str("}");

    println!("Hostname: {:?}", gethostname());
    HttpResponse::Ok().
        content_type(ContentType::json()).
        body(json_string)
}

#[actix_web::main]
async fn main() -> std::io::Result<()> {
    let key: &str = "PING_LISTEN_PORT";
    let mut listen_port: u16 = 8080;
    if env::var(key).is_ok() {
        let temp: String = env::var(key).unwrap();
        listen_port = temp.parse().unwrap();
    }

    HttpServer::new(|| {
        App::new()
            .service(ping)
    })
    .bind(("0.0.0.0", listen_port))?
    .run()
    .await
}