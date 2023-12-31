(define (product a b c)
  (and (positive? a)
        (positive? b)
        (positive? c)
        (* a b c)))

(define (pro3 a b c)
  (if (or (negative? a)
          (negative? b)
          (negative? c))
      (* a b c)))
