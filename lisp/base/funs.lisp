(defun len (xs)
  (if (null xs)
    0
    (+ 1 (len (rest xs)))))

(defun join-2 (xs ys)
  (if (null xs)
      ys
      (cons (first xs)
            (join-2 (rest xs) ys))))
(defun join (&rest xs)
  (if (null xs)
    nil
    (join-2 (first xs)
            (apply #'join (rest xs)))))
(defun rev (xs)
  (if (null (rest xs))
    xs
    (join (rev (rest xs))
          (cons (first xs) nil))))

(defun dup (x n)
  (if (= n 0)
    nil
    (cons x (dup x (- n 1)))))

(defun a-seq (a b n)
  (if (= n 0)
    nil
    (cons a (a-seq (+ a b) b (- n 1)))))

(defun _and (xs)
  (if (null (rest xs))
    (first xs)
    (and (first xs)
        (_and (rest xs)))))

(defun _or (xs)
  (if (null (rest xs))
    (first xs)
    (or (first xs)
      (_or (rest xs)))))

(defun thru (f xs)
  (cond ((null xs)
          nil)
        ((funcall f (first xs))
          (cons (first xs)
                (thru f (rest xs))))
        (t
          (thru f (rest xs)))))

(defun number-satisfy (f xs)
  (len (thru f xs)))

(defun exist (f xs)
  (< 0 (number-satisfy f xs)))

(defun _max (f xs)
  (cond ((null (rest xs))
          (first xs))
        ((funcall
          f (first xs) (_max f (rest xs)))
          (_max f (rest xs)))
        (t
          (first xs))))
