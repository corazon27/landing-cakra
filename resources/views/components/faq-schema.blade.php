@props(['faqs' => []])

@if(!empty($faqs))
@php
$schemaItems = collect($faqs)->map(fn($faq) => [
    '@type' => 'Question',
    'name' => $faq['question'],
    'acceptedAnswer' => [
        '@type' => 'Answer',
        'text' => strip_tags($faq['answer']),
    ],
])->values()->all();

$faqSchema = [
    '@context' => 'https://schema.org',
    '@type' => 'FAQPage',
    'mainEntity' => $schemaItems,
];
@endphp

<script type="application/ld+json">
{!! json_encode($faqSchema, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT) !!}
</script>
@endif