	.file	"t1.c";ソース・ファイルが"t1.c"
	.text
	.section	.rodata;プログラムないで使用される読み取り専用データが格納される
.LC0:;この文字列へのポインタを後で使う
	.string	"a + b = %d\n";printf()で使用されるフォーマット文字列
	.text
	.globl	main;main関数の開始、globlは他のファイルから参照可能にするための指示
	.type	main, @function
main:
.LFB0:;関数のプロローグを開始するためのラベルとディレクティブ
	.cfi_startproc
	endbr64;セキュリティ関連の命令
	pushq	%rbp
	.cfi_def_cfa_offset 16
	.cfi_offset 6, -16
	movq	%rsp, %rbp;rbpはベースポインタ rspスタックポインタ
	.cfi_def_cfa_register 6
	subq	$16, %rsp;16バイトの領域をスタックから確保
	movl	$5, -12(%rbp);aとbに5,7をそれぞれ代入
	movl	$7, -8(%rbp)
	movl	-12(%rbp), %edx;aとbの値をロードし、それらを加算して結果を計算
	movl	-8(%rbp), %eax
	addl	%edx, %eax;eaxに結果が格納される
	movl	%eax, -4(%rbp);resultに保存

	movl	-4(%rbp), %eax;結果をesiにコピー、printf()を呼び出して、結果を出力,rdiにはフォーマット文字列へのポインタが設定されている
	movl	%eax, %esi
	leaq	.LC0(%rip), %rax
	movq	%rax, %rdi

	movl	$0, %eax;関数が終了、eaxに0をセット、leave,ret命令で、Stackフレームを開放
	call	printf@PLT
	movl	$0, %eax
	leave
	.cfi_def_cfa 7, 8
	ret
	.cfi_endproc
.LFE0:
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
