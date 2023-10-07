(define hello
  (lambda (name)
    (string-append "Helo " name "!")))

(define sum3
  (lambda (a b c)
    (+ a b c)))

(define three-args+
  (lambda (a b c . d)
  (list a b c d)))

(define (hi name)
  (string-append "Hi " name "!!"))

(define (sum4 a b c d)
  (+ a b c d))

(define (three-args+ a b c . d)
  (list a b c d))
