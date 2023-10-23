FROM rust:latest AS builder

ENV RUSTFLAGS='-C target-feature=+crt-static'

RUN cargo new --bin /app

WORKDIR /app

COPY Cargo.* /app/.

RUN cargo build --target x86_64-unknown-linux-gnu --release

COPY src/* /app/src/

RUN echo "// cargo go build ce projet !" >> /app/src/main.rs

RUN cargo build --target x86_64-unknown-linux-gnu --bins --release

FROM scratch
EXPOSE 8080
COPY --from=builder /app/target/x86_64-unknown-linux-gnu/release/test_rust /api
CMD ["./api"]