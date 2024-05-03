<?php

declare(strict_types=1);

namespace madpilot78\PhpCsFixerConfig;

use PhpCsFixer\Config as Base;

class Config extends Base
{
    private const array MYRULES = [
        '@PER-CS2.0' => true,
        'array_syntax' => ['syntax' => 'short'],
        'no_multiline_whitespace_around_double_arrow' => true,
        'no_whitespace_before_comma_in_array' => ['after_heredoc' => true],
        'normalize_index_brace' => true,
        'trim_array_spaces' => true,
        'whitespace_after_comma_in_array' => ['ensure_single_space' => true],
        'attribute_empty_parentheses' => true,
        'braces_position' => [
            'allow_single_line_anonymous_functions' => true,
            'allow_single_line_empty_anonymous_classes' => true,
        ],
        'no_trailing_comma_in_singleline' => true,
        'class_reference_name_casing' => true,
        'integer_literal_case' => true,
        'magic_constant_casing' => true,
        'magic_method_casing' => true,
        'native_function_casing' => true,
        'native_type_declaration_casing' => true,
        'no_short_bool_cast' => true,
        'no_unset_cast' => true,
        'class_attributes_separation' => true,
        'class_attributes_separation' => ['elements' => ['method' => 'one']],
        'ordered_types' => true,
        'multiline_comment_opening_closing' => true,
        'no_empty_comment' => true,
        'single_line_comment_spacing' => true,
        'empty_loop_body' => ['style' => 'braces'],
        'include' => true,
        'no_alternative_syntax' => true,
        'no_unneeded_braces' => ['namespaces' => true],
        'lambda_not_used_import' => true,
        'nullable_type_declaration_for_default_null_value' => true,
        'fully_qualified_strict_types' => true,
        'no_unneeded_import_alias' => true,
        'no_unused_imports' => true,
        'single_import_per_statement' => ['group_to_single_imports' => true],
        'declare_parentheses' => true,
        'nullable_type_declaration' => true,
        'single_space_around_construct' => true,
        'list_syntax' => true,
        'clean_namespace' => true,
        'no_leading_namespace_whitespace' => true,
        'assign_null_coalescing_to_coalesce_equal' => true,
        'no_useless_concat_operator' => true,
        'no_useless_nullsafe_operator' => true,
        'object_operator_without_whitespace' => true,
        'standardize_not_equals' => true,
        'ternary_to_null_coalescing' => true,
        'align_multiline_comment' => true,
        'no_blank_lines_after_phpdoc' => true,
        'no_empty_phpdoc' => true,
        'no_superfluous_phpdoc_tags' => true,
        'phpdoc_add_missing_param_annotation' => true,
        'phpdoc_align' => ['align' => 'left'],
        'phpdoc_order' => ['order' => ['param', 'return', 'throws']],
        'phpdoc_scalar' => true,
        'phpdoc_summary' => true,
        'phpdoc_trim_consecutive_blank_line_separation' => true,
        'phpdoc_trim' => true,
        'phpdoc_types' => true,
        'phpdoc_types_order' => true,
        'phpdoc_var_annotation_correct_order' => true,
        'phpdoc_var_without_name' => true,
        'no_useless_return' => true,
        'multiline_whitespace_before_semicolons' => true,
        'no_empty_statement' => true,
        'no_singleline_whitespace_before_semicolons' => true,
        'semicolon_after_instruction' => true,
        'space_after_semicolon' => ['remove_in_empty_for_expressions' => true],
        'simple_to_complex_string_variable' => true,
        'single_quote' => true,
        'heredoc_indentation' => true,
        'method_chaining_indentation' => true,
        'no_extra_blank_lines' => true,
        'no_spaces_around_offset' => true,
        'type_declaration_spaces' => true,
        'types_spaces' => true,
    ];

    public function getRules(): array
    {
        return self::MYRULES + parent::getRules();
    }
}
