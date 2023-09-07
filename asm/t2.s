	.file	"t2.c"

	.text
	.section	.rodata
.LC0:
	.string	"a * 3 = %d\n"

	;プロローグ。Stackフレームをセットアップ、ローカル変数へのアクセスを可能にする。Stackフレームは16バイト文確保されている
	.text
	.globl	main
	.type	main, @function
main:
.LFB6:
	.cfi_startproc
	endbr64
	pushq	%rbp
	.cfi_def_cfa_offset 16
	.cfi_offset 6, -16
	movq	%rsp, %rbp
	.cfi_def_cfa_register 6
	subq	$16, %rsp

	;計算を行う
	movl	$1, -4(%rbp);-4($rbp)int型変数に、1をセット
	movl	-4(%rbp), %edx;%edxにロード
	movl	%edx, %eax;%edxを%eaxにコピー
	addl	%eax, %eax;2倍にして
	addl	%edx, %eax;結果を格納

	;計算結果を%esiにコピーし、printf()を呼び出し、
	movl	%eax, %esi
	leaq	.LC0(%rip), %rax
	movq	%rax, %rdi;%rdiにはフォーマット文字列へのポインタが設定されている
	movl	$0, %eax
	call	printf@PLT

	;エピローグ。関数を正常に終了させるための命令
	movl	$0, %eax
	leave
	.cfi_def_cfa 7, 8
	ret
	.cfi_endproc
.LFE6:
	.size	main, .-main
	.ident	"GCC: (Ubuntu 11.3.0-1ubuntu1~22.04.1) 11.3.0"
	.section	.note.GNU-stack,"",@progbits
	.section	.note.gnu.property,"a"
	.align 8
	.long	1f - 0f
	.long	4f - 1f
	.long	5
0:
	.string	"GNU"
1:
	.align 8
	.long	0xc0000002
	.long	3f - 2f
2:
	.long	0x3
3:
	.align 8
4:
