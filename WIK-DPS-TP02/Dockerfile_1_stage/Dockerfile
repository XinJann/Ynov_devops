FROM rust:latest

RUN cargo new --vcs none --bin /app

WORKDIR /app

COPY Cargo.* /app/.

RUN cargo build --release

COPY src/* /app/src/

RUN echo "// cargo go build ce projet !" >> /app/src/main.rs

RUN cargo build --release

EXPOSE 8080

USER 1000

CMD ./target/release/test_rust